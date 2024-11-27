<?php
namespace App\Controllers;
use App\Models\AdminModel;
use App\Models\ProgrammeModel;

class Admin extends BaseController
{
    protected $programmeModel;

    public function __construct()
    {
        $this->programmeModel = new ProgrammeModel();
    }

    // admin login view page function
    public function index()
    {
        return view('admin_view/login');
    }
    // login function
    public function login()
    {
        $session = session();
        $model = new AdminModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $admin = $model->where('email', $email)->first();

        if ($admin && $admin['password'] === $password) {
            // Store user info in session (you may want to store more than just 'name')
            $session->set('logged_in', true);
            $session->set('name', $admin['name']);  // Store the logged-in user's name

            return redirect()->to('admin/dashboard');
        } else {
            $session->setFlashdata('error', '<i class="fa fa-warning"></i> Invalid username or password.');
            return redirect()->to('/');
        }
    }
    // redirect to dashboard function
    public function dashboard()
    {
        $model = new ProgrammeModel();
        $programmeInfo = $model->orderBy('created_at', 'DESC')->findAll(); // Fetch all rooms records

        // Format the created_at date to dd/mm/yyyy
        foreach ($programmeInfo as &$programme) {
            // Check if the date is empty or null
            if (empty($programme['date'])) {
                $programme['date'] = '00/00/0000'; // Default date if not set
            } else {
                $programme['date'] = date('d/m/Y', strtotime($programme['date'])); // Format date if available
            }
        }

        $data['programme_info'] = $programmeInfo;
        return view('admin_view/dashboard', $data); // Pass formatted data to the view
    }
    // save details function
    public function saveDetails()
    {
        $session = session();  // Get the session object
        $userName = $session->get('name');  // Assuming 'name' is stored in the session during login

        // If no user is logged in, return an error response
        if (!$userName) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'User is not logged in.'
            ]);
        }

        // Get data from the request
        $data = [
            'progTitle' => $this->request->getPost('progTitle'),
            'targetGroup' => $this->request->getPost('targetGroup'),
            'date' => $this->request->getPost('date'),  // This should be in 'DD/MM/YYYY' format
            'progDirector' => $this->request->getPost('progDirector'),
            'dealingAsstt' => $this->request->getPost('dealingAsstt'),
            'materialLink' => $this->request->getPost('materialLink'),
            'paymentdone' => $this->request->getPost('paymentdone')
        ];

        //    print_r($data);die;

        // Validate the required fields
        if (empty($data['progTitle']) || empty($data['targetGroup']) || empty($data['date']) || empty($data['progDirector']) || empty($data['dealingAsstt'])) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Please fill all required fields.'
            ]);
        }

        // Handle file uploads if paymentdone is "yes"
        if ($data['paymentdone'] == 'yes') {
            // Handle programme schedule PDF upload
            $file = $this->request->getFile('progPdf');
            if ($file && $file->isValid()) {
                $originalFileName = $file->getName();
                $fileExtension = $file->getExtension();

                // Concatenate the original file name with " by " and the username
                $newFileName = pathinfo($originalFileName, PATHINFO_FILENAME) . '.' . $fileExtension . ' by ' . $userName;

                // Move the file to the 'uploads/programsPdf' directory with the new name
                $file->move('uploads/programsPdf', $newFileName);
                $data['progPdf'] = $newFileName;  // Save the new file name in the database
            } else {
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Please upload a valid programme schedule PDF.'
                ]);
            }

            // Handle attendance PDF upload
            $attendanceFile = $this->request->getFile('attandancePdf');
            if ($attendanceFile && $attendanceFile->isValid()) {
                $originalAttendanceFileName = $attendanceFile->getName();
                $attendanceFileExtension = $attendanceFile->getExtension();

                // Concatenate the original file name with " by " and the username
                $newAttendanceFileName = pathinfo($originalAttendanceFileName, PATHINFO_FILENAME) . '.' . $attendanceFileExtension . ' by ' . $userName;

                // Move the file to the 'uploads/attendance' directory with the new name
                $attendanceFile->move('uploads/attendance', $newAttendanceFileName);
                $data['attandancePdf'] = $newAttendanceFileName;  // Save the new file name in the database
            } else {
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Please upload a valid attendance PDF.'
                ]);
            }
        }

        // Save data into the database
        $programModel = new ProgrammeModel();
        $programModel->save($data);

        // Return success response to the AJAX call
        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Details added successfully',
            'userName' => $userName,  // Send the username back in the response
            'progPdf' => $data['progPdf'] ?? null,  // Send the uploaded program PDF name (or null if no upload)
            'attandancePdf' => $data['attandancePdf'] ?? null,  // Send the uploaded attendance PDF name (or null if no upload)
        ]);
    }


    public function deleteDetails()
    {
        // Get the prog_id from the POST data
        $prog_id = $this->request->getPost('prog_id');

        if ($prog_id) {
            // Load your model
            $model = new ProgrammeModel();

            // Perform the delete operation
            $result = $model->delete($prog_id); // Adjust this based on your model's delete method

            if ($result) {
                // Respond with success
                return $this->response->setJSON(['success' => true]);
            } else {
                // Respond with failure
                return $this->response->setJSON(['success' => false]);
            }
        } else {
            return $this->response->setJSON(['success' => false]);
        }
    }
    // admin logout function 
    public function logout()
    {
        $session = session();
        $session->destroy(); // Destroy session
        return redirect()->to(site_url('/')); // Redirect to login page
    }


    public function getRecordDetails()
    {
        $id = $this->request->getPost('prog_id');

        if (!$id) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Invalid request. Programme ID is missing.',
            ]);
        }

        $record = $this->programmeModel->find($id);

        if ($record) {
            return $this->response->setJSON([
                'status' => 'success',
                'data' => $record,
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Record not found.',
            ]);
        }
    }
    public function updateRecord()
    {
        // echo "hh";
        // die;
        $id = $this->request->getGet('prog_id');
        // echo $id;
        // die;

        if (!$id) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Programme ID is missing hai bhai :( ']);
        } else {
            $result = $this->programmeModel->update_user_details($id);
            // print_r($result);
            // die;
            echo json_encode($result);
        }
    }

    // Collect data from request
    // $progTitle = $this->request->getPost('progTitle');
    // $targetGroup = $this->request->getPost('targetGroup');
    // $date = $this->request->getPost('date');
    // $progDirector = $this->request->getPost('progDirector');
    // $dealingAsstt = $this->request->getPost('dealingAsstt');
    // $materialLink = $this->request->getPost('materialLink');
    // $paymentdone = $this->request->getPost('paymentdone');

    // Handle file uploads
    // $file = $this->request->getFile('progPdf');
    // $attendanceFile = $this->request->getFile('attandancePdf');

    // $progPdfName = null;
    // $attendancePdfName = null;

    // if ($file && $file->isValid()) {
    //     $progPdfName = $file->getRandomName();
    //     $file->move(WRITEPATH . 'uploads/', $progPdfName);
    // }

    // if ($attendanceFile && $attendanceFile->isValid()) {
    //     $attendancePdfName = $attendanceFile->getRandomName();
    //     $attendanceFile->move(WRITEPATH . 'uploads/', $attendancePdfName);
    // }

    // // Prepare update data
    // $updateData = [
    //     'progTitle' => $progTitle,
    //     'targetGroup' => $targetGroup,
    //     'date' => $date,
    //     'progDirector' => $progDirector,
    //     'dealingAsstt' => $dealingAsstt,
    //     'materialLink' => $materialLink,
    //     'paymentdone' => $paymentdone,
    // ];


    // if ($progPdfName) {
    //     $updateData['progPdf'] = $progPdfName;
    // }

    // if ($attendancePdfName) {
    //     $updateData['attandancePdf'] = $attendancePdfName;
    // }

    // if ($this->programmeModel->update($id, $updateData)) {
    //         return $this->response->setJSON(['status' => 'success']);
    //     } else {
    //         return $this->response->setJSON(['status' => 'error', 'message' => 'Update failed.']);
    //     }
    // }


}
