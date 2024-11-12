public function up()
{
    Schema::create('absensis', function (Blueprint $table) {
        $table->id();
        $table->foreignId('karyawan_id')->constrained()->onDelete('cascade');
        $table->date('tanggal');
        $table->enum('status', ['hadir', 'tidak_hadir', 'izin', 'sakit']);
        $table->timestamps();
    });
}
