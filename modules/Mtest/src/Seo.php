<?php

/**
 * Seo class to set application meta data.
 *
 * @name       Seo.php
 * @category   Mtest
 * @package    Seo
 * @author     Vinod Pawar <vpawar9091@gmail.com>
 * @version    GIT: $Id$
 * @link       None
 * @filesource
 */

namespace Modules\Mtest;

/**
 * Seo class to set application meta data.
 *
 * @name     Seo
 * @category ToolKit
 * @package  Seo
 * @author   Vinod Pawar <vpawar9091@gmail.com>
 * @version  Release:<v.1>
 * @link     None
 */
class Seo
{

    /**
     * Defined list of meta data
     *
     * @var array
     */
    public $metaTags = ['Title' => null];

    /**
     * Set page title
     *
     * @name   setTitle
     * @access public
     * @author Vinod Pawar <vpawar9091@gmail.com>     *
     * @param string $title description
     *
     * @return void
     */
    public function setTitle($title)
    {
        $this->metaTags['title'] = $title;
    }



    /**
     * Generate meta data block
     *
     * @name   render
     * @access public
     * @author Vinod Pawar <vpawar9091@gmail.com>     *
     * @return void
     */
    public function render()
    {
        $html = '';
        foreach ($this->metaTags as $metaTag => $value) {

            if ($metaTag == 'title') {
                $html .= '<title>' . $value . '</title>' . PHP_EOL;
            } elseif (empty($value)) {

            }
        }
        return $html;
    }

}
