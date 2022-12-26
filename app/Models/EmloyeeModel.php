<?php
namespace App\Models;
use Codeigniter\Model;

class EmployeeModel extends Model
{
    protected $table = "employees";
    protected $primaryKey = "id";
    protected $allowFields = ['name', 'email'];
}