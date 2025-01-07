<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\{Permission, Role};

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // USERS
            ['name' => 'create_user', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'view_user', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'edit_user', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'update_user', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'delete_user', 'created_at' => now(), 'updated_at' => now()],
            
            // ROLES
            ['name' => 'create_role', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'view_role', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'edit_role', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'update_role', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'delete_role', 'created_at' => now(), 'updated_at' => now()],
           
            // PERLMISSIONS
            ['name' => 'create_permission', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'view_permission', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'edit_permission', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'update_permission', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'delete_permission', 'created_at' => now(), 'updated_at' => now()],
            
            // PRODUITS
            ['name' => 'create_product', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'view_product', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'edit_product', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'update_product', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'delete_product', 'created_at' => now(), 'updated_at' => now()],
            
            // CATEGORIES
            ['name' => 'create_category', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'view_category', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'edit_category', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'update_category', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'delete_category', 'created_at' => now(), 'updated_at' => now()],
            
            // COMMANDES
            ['name' => 'create_order', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'view_order', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'edit_order', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'update_order', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'delete_order', 'created_at' => now(), 'updated_at' => now()],
            
            // COUPONS
            ['name' => 'create_coupon', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'view_coupon', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'edit_coupon', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'update_coupon', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'delete_coupon', 'created_at' => now(), 'updated_at' => now()],
            
            // RESERVATION
            ['name' => 'create_reservation', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'view_reservation', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'edit_reservation', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'update_reservation', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'delete_reservation', 'created_at' => now(), 'updated_at' => now()],
            
            // ORDERITEM
            ['name' => 'create_orderItem', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'view_orderItem', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'edit_orderItem', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'update_orderItem', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'delete_orderItem', 'created_at' => now(), 'updated_at' => now()],
            
            // ADRESSES
            ['name' => 'create_adresse', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'view_adresse', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'edit_adresse', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'update_adresse', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'delete_adresse', 'created_at' => now(), 'updated_at' => now()],
            
            // TRANSACTIONS
            ['name' => 'create_transaction', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'view_transaction', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'edit_transaction', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'update_transaction', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'delete_transaction', 'created_at' => now(), 'updated_at' => now()],
            
            // CONTACTS
            ['name' => 'create_contact', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'view_contact', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'edit_contact', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'update_contact', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'delete_contact', 'created_at' => now(), 'updated_at' => now()],
            
            // SLIDERS
            ['name' => 'create_slider', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'view_slider', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'edit_slider', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'update_slider', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'delete_slider', 'created_at' => now(), 'updated_at' => now()],
            
            // TEAMMEMBERS
            ['name' => 'create_member', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'view_member', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'edit_member', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'update_member', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'delete_member', 'created_at' => now(), 'updated_at' => now()],
        ];

        
        DB::table('permissions')->insert($permissions);


        // ATTRIBUER TOUS LES ROLES A L'ADMIN
        $supAdminRole = Role::where('name', 'superAdmin')->first();
        
        $permissionIds = Permission::pluck('id')->toArray();
        $supAdminRole->permissions()->attach($permissionIds);
    
        
    
    }
}
