<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class   PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'admins index',
                'guard_name' => 'admin',
                'created_at' => '2022-02-07 05:37:45',
                'updated_at' => '2022-02-07 05:37:45',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'admins create',
                'guard_name' => 'admin',
                'created_at' => '2022-02-07 05:37:45',
                'updated_at' => '2022-02-07 05:37:45',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'admins edit',
                'guard_name' => 'admin',
                'created_at' => '2022-02-07 05:37:45',
                'updated_at' => '2022-02-07 05:37:45',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'admins delete',
                'guard_name' => 'admin',
                'created_at' => '2022-02-07 05:37:45',
                'updated_at' => '2022-02-07 05:37:45',
            ),
        ));

        //admine butun icz=azeleri vermek ucun
        $permissions = Permission::all();
        $data = [];
        foreach ($permissions as $permission){
            $data[]=[ 'permission_id' => $permission->id, 'role_id' => 1];
        }
        \DB::table('role_has_permissions')->delete();
        \DB::table('role_has_permissions')->insert($data);


    }
}
