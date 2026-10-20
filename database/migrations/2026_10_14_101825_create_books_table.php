public function up(): void
{
    Schema::create('books', function (Blueprint $table) {
        $table->id(); 
        $table->string('name')unique();
        $table->string('title'); 
        $table->string('author'); 
        $table->year('year'); 
        $table->integer('stock');
        $table->timestamps(); 
    });
}
