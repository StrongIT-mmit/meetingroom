<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions=['This parts is admin not user'];

        foreach ($permissions as $permission) {
        	# code...

        	Permission::create(['name'=>$permission]);
        }
    }
}
