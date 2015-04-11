<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsuario extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuario', function(Blueprint $table)
		{
		
                    $table->increments('id');
                    $table->string('nombre');
                    $table->string('correo');
                    $table->string('password');
                    $table->rememberToken();
                    $table->timestamps();
		});
                Schema::create('publicacion', function(Blueprint $table)
		{
		
                    $table->increments('id');
                    $table->text('publicacion');
                    $table->boolean('tipo');
                    $table->integer('id_padre')->unsigned()->nullable();
                    $table->integer('id_usuario')->unsigned();
                    $table->timestamps();
                    $table->foreign('id_usuario')->references('id')->on('usuario');
                    $table->foreign('id_padre')->references('id')->on('publicacion');
		});
                Schema::create('me_gusta', function(Blueprint $table)
		{
		
                    $table->increments('id');
                    $table->integer('id_usuario')->unsigned();;
                    $table->integer('id_publicacion')->unsigned();
                    $table->timestamps();
                    $table->foreign('id_usuario')->references('id')->on('usuario');
                    $table->foreign('id_publicacion')->references('id')->on('publicacion');
		});
        DB::table('usuario')
                ->insert([
                    'nombre'=>'Camilo',
                    'correo'=>'jcamilo8a01@hotmail.com',
                    'password'=>Hash::make('123')
                ]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop("me_gusta");
            Schema::drop("publicacion");
            Schema::drop("usuario");	//;
	}

}
