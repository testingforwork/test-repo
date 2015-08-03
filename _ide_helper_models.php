<?php
/**
 * An helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Admin
 *
 * @property string $id 
 * @property string $adminTel 
 * @method static \Illuminate\Database\Query\Builder|\App\Admin whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Admin whereAdminTel($value)
 */
	class Admin {}
}

namespace App{
/**
 * App\Category
 *
 * @property string $id 
 * @property string $catName 
 * @property string $catParentId
 * @property string $iku
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products 
 * @property-read \App\Category $catParent 
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Category[] $subCats 
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereCatName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereCatParentId($value)
 */
	class Category {}
}

namespace App{
/**
 * App\Customer
 *
 * @property string $id 
 * @property string $custName 
 * @property string $custGender 
 * @property string $custDOB 
 * @property string $custTel 
 * @property string $custAddr 
 * @property string $distId 
 * @property-read \App\District $district 
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\CustOrder[] $custOrders 
 * @method static \Illuminate\Database\Query\Builder|\App\Customer whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Customer whereCustName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Customer whereCustGender($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Customer whereCustDOB($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Customer whereCustTel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Customer whereCustAddr($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Customer whereDistId($value)
 */
	class Customer {}
}

namespace App{
/**
 * App\CustOrder
 *
 * @property string $id 
 * @property string $ordDate 
 * @property float $ordDiscount 
 * @property string $deliAddr 
 * @property string $custId 
 * @property string $distId 
 * @property string $jobId 
 * @property-read \App\Customer $customer 
 * @property-read \App\District $district 
 * @property-read \App\Schedule $schedule 
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products 
 * @method static \Illuminate\Database\Query\Builder|\App\CustOrder whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CustOrder whereOrdDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CustOrder whereOrdDiscount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CustOrder whereDeliAddr($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CustOrder whereCustId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CustOrder whereDistId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CustOrder whereJobId($value)
 */
	class CustOrder {}
}

namespace App{
/**
 * App\District
 *
 * @property string $id 
 * @property string $distName 
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Customer[] $customer 
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Schedule[] $schedules 
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\CustOrder[] $custOrders 
 * @method static \Illuminate\Database\Query\Builder|\App\District whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\District whereDistName($value)
 */
	class District {}
}

namespace App{
/**
 * App\Driver
 *
 * @property string $id 
 * @property string $drvName 
 * @property string $drvGender 
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Schedule[] $schedules 
 * @method static \Illuminate\Database\Query\Builder|\App\Driver whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Driver whereDrvName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Driver whereDrvGender($value)
 */
	class Driver {}
}

namespace App{
/**
 * App\Feedback
 *
 * @property integer $id 
 * @property string $name 
 * @property string $email 
 * @property string $message 
 * @method static \Illuminate\Database\Query\Builder|\App\Feedback whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Feedback whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Feedback whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Feedback whereMessage($value)
 */
	class Feedback {}
}

namespace App{
/**
 * App\Product
 *
 * @property string $id 
 * @property string $prodName 
 * @property float $prodPrice 
 * @property string $prodPhoto 
 * @property integer $stockQty 
 * @property string $catId 
 * @property string $suppId 
 * @property-read \App\Category $category 
 * @property-read \App\Supplier $supplier 
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\CustOrder[] $custOrders 
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereProdName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereProdPrice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereProdPhoto($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereStockQty($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereCatId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereSuppId($value)
 */
	class Product {}
}

namespace App{
/**
 * App\Role
 *
 * @property string $id 
 * @property string $name 
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User2[] $users 
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereName($value)
 */
	class Role {}
}

namespace App{
/**
 * App\Schedule
 *
 * @property string $id 
 * @property string $jobDate 
 * @property string $drvId 
 * @property string $distId 
 * @property-read \App\Driver $driver 
 * @property-read \App\District $district 
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\CustOrder[] $custOrders 
 * @method static \Illuminate\Database\Query\Builder|\App\Schedule whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Schedule whereJobDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Schedule whereDrvId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Schedule whereDistId($value)
 */
	class Schedule {}
}

namespace App{
/**
 * App\Supplier
 *
 * @property string $id 
 * @property string $suppName 
 * @property string $suppTel 
 * @property string $suppAddr 
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products 
 * @method static \Illuminate\Database\Query\Builder|\App\Supplier whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Supplier whereSuppName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Supplier whereSuppTel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Supplier whereSuppAddr($value)
 */
	class Supplier {}
}

namespace App{
/**
 * App\User
 *
 */
	class User {}
}

namespace App{
/**
 * App\User2
 *
 * @property string $id 
 * @property string $name 
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles 
 * @method static \Illuminate\Database\Query\Builder|\App\User2 whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User2 whereName($value)
 */
	class User2 {}
}

namespace App{
/**
 * App\UserRole
 *
 * @property string $userId 
 * @property string $roleId 
 * @method static \Illuminate\Database\Query\Builder|\App\UserRole whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UserRole whereRoleId($value)
 */
	class UserRole {}
}

