<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableGroupAndProduct extends Migration
{
    public function up()
    {
        // Tạo bảng category
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'NVARCHAR',
                'constraint' => 255,
            ],
            'meta' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'partnert' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'type' => [
                'type' => 'INT',
                'constraint' => 255,
            ],
        ]);
        
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('category');

        // Tạo bảng group
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'NVARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('group');

        //Tạo bảng oder
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 255,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,

            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 255,

            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'note' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'total' => [
                'type' => 'INT',
                'constraint' => 10,
            ]

        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('oder');


        
        // Tạo bảng product
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 255,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'NVARCHAR',
                'constraint' => 255,
            ],
            'image' => [
                'type' => 'TEXT',

            ],
            'price' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'group_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'NULL' => true,
            ],

            'category_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'NULL' => true,
            ],
            'sale' => [
                'type' => 'INT',
                'constraint' => 11,
                'NULL' => true,
            ],
            'oder' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'NULL' => true,
            ],
            'view' => [
                'type' => 'INT',
                'constraint' => 11,
                'NULL' => true,
            ],
            'type' => [
                'type' => 'INT',
                'constraint' => 11,
                'NULL' => true,
            ],
            'discription' => [
                'type' => 'NVARCHAR',
                'constraint' => 255,
                'NULL' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('category_id', 'category', 'id');
        $this->forge->addForeignKey('group_id', 'group', 'id');
        $this->forge->createTable('product');
       
        //Tạo bảng oder detail
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 255,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'order_id' => [
                'type' => 'INT',
                'constraint' => 255,
                'unsigned' => true,
                'NULL' => true,

            ],
            'product_id' => [
                'type' => 'INT',
                'constraint' => 255,
                'unsigned' => true,
                'NULL' => true,

            ],
            'quantity' => [
                'type' => 'int',
                'constraint' => 255,
            ],
            'price' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('order_id', 'oder', 'id');
        $this->forge->addForeignKey('product_id', 'product', 'id');
        $this->forge->createTable('oder_detail');

    }

    public function down()
    {
        $this->forge->dropTable('category');
        $this->forge->dropTable('group');
        $this->forge->dropTable('product');
        $this->forge->dropTable('oder_detail');
        $this->forge->dropTable('oder');
    }


}