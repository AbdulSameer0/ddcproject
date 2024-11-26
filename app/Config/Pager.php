<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Pager extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Templates
     * --------------------------------------------------------------------------
     *
     * Pagination links are rendered out using views to configure their
     * appearance. This array contains aliases and the view names to
     * use when rendering the links.
     *
     * Within each view, the Pager object will be available as $pager,
     * and the desired group as $pagerGroup;
     *
     * @var array<string, string>
     */
    public array $templates = [
        'default_full' => 'CodeIgniter\Pager\Views\default_full',
        'default_simple' => 'CodeIgniter\Pager\Views\default_simple',
        'default_head' => 'CodeIgniter\Pager\Views\default_head',
    ];

    /**
     * --------------------------------------------------------------------------
     * Items Per Page
     * --------------------------------------------------------------------------
     *
     * The default number of results shown in a single page.
     */
    public int $perPage = 20;
    public $bootstrap = [
        'full' => '<nav><ul class="pagination justify-content-center">{first}{previous}{pages}{next}{last}</ul></nav>',
        'first' => '<li class="page-item"><a href="{uri}" class="page-link">First</a></li>',
        'last' => '<li class="page-item"><a href="{uri}" class="page-link">Last</a></li>',
        'previous' => '<li class="page-item"><a href="{uri}" class="page-link">&laquo;</a></li>',
        'next' => '<li class="page-item"><a href="{uri}" class="page-link">&raquo;</a></li>',
        'active' => '<li class="page-item active"><a href="{uri}" class="page-link">{page}</a></li>',
        'inactive' => '<li class="page-item disabled"><a href="#" class="page-link">{page}</a></li>',
    ];

}
