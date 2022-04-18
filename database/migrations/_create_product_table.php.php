$table->string('name')
$table->string('phone')->nullable();
public function up()
{
   Schema:: create('product',function(Blueprint $table){
       $table->id(;
       $table->string()'name');
       $table->string('phone')->nullable();
       $table->timestamps();
   });
   }

