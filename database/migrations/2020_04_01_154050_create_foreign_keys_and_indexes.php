<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysAndIndexes extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table( 'grades', function ( Blueprint $table ) {
			$table->index( 'student_id' );
			$table->index( 'lecture_id' );

			$table->foreign( 'student_id' )
				  ->references( 'id' )
				  ->on( 'students' )
				  ->onDelete( 'CASCADE' );

			$table->foreign( 'lecture_id' )
				  ->references( 'id' )
				  ->on( 'lectures' )
				  ->onDelete( 'CASCADE' );
		} );


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table( 'grades', function ( Blueprint $table ) {
			$table->dropIndex( [ 'student_id' ] );
			$table->dropIndex( [ 'lecture_id' ] );
		} );
	}
}
