<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 12/11/17
 * Time: 10:09
 */

namespace Home\Controller;
use Think\Controller;

class ListController extends Controller
{
    public function index(){
        $this->display("List");
    }
}