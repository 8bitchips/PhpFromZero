<?php 
namespace App\Repositories;
use App\Entities\User;
use PhpFromZero\Orm\Orm;

/**
 * User repository
 * 
 * @author Justin Dah-kenangnon <dah.kenangnon@gmail.com>
 * 
 * @link https://github.com/Dahkenangnon
 * @link https://Justin.Dah-kenangnon.com
 * @link https://Paonit.com
 * @link https://Dah-kenangnon.com
 */
class UserRepository extends Orm{

    public function __construct()
    {
        parent::__construct(User::class);
    }
}