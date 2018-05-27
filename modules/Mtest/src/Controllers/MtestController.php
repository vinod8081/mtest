<?php

/**
 * Mtest laravel controller file. Explained different relationship like one-to-many, one-to-one, many-to-many, facades.
 *
 * @category   Mtest
 * @package    Mtest
 * @author     Vinod Pawar <vpawar9091@gmail.com>
 * @name       MtestController.php
 * @version    GIT: <git_id>
 * @link       http://google.com
 * @filesource
 */

namespace Modules\Mtest\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Modules\Mtest\Models\Account;
use Modules\Mtest\Facades\Seo;

/**
 * Mtest Controller Class
 *
 * @category   Mtest
 * @package    Mtest
 * @author     Vinod Pawar <vpawar9091@gmail.com>
 * @name       MtestController.php
 * @version    Release:<v.1>
 * @link       http://google.com
 * @filesource
 */
class MtestController extends Controller
{

    // Store logged user id
    public $userId = null;
    /**
     * Constructor call
     */
    public function __construct()
    {
        $this->userId         = \Auth::user()->id;
    }

    /**
     * Demonstrate one-to-one relationship
     *
     * @name   viewAccountDetails
     * @access public
     * @author Vinod Pawar <vpawar9091@gmail.com>
     *
     * @return void
     */

    public function viewAccountDetails()
    {
            $data = \Auth::user();
            $userId = $data->id;
            $account = User::find($userId)->account;
            Seo::setTitle('Account Details');
            return view('mtest::userDetails', compact('data','account'));
    }
    /**
     * Demonstrate inverse of the hasOne relationship using the belongsTo method
     *
     * @name   viewUserDetailsByAccount
     * @access public
     * @author Vinod Pawar <vpawar9091@gmail.com>
     *
     * @return void
     */

    public function viewUserDetailsByAccount()
    {
        $accountId = 1;
        $account = Account::find($accountId)->user;
        print_r($account);
        die;
    }
    /**
     * Demonstrate the one to many relationship using the hasMany
     *
     * @name   viewUserPosts
     * @access public
     * @author Vinod Pawar <vpawar9091@gmail.com>
     *
     * @return void
     */

    public function viewUserPosts()
    {
        $userId = $this->userId;
        $posts = User::find($userId)->posts;
        print_r($posts);
        die;
    }
}
