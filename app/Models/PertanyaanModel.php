<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {
    public static function get_all() {
        $pertanyaan = DB::table('pertanyaan')->get();
        return $pertanyaan; 
    }

    public static function save($data) {
        $new_pertanyaan = DB::table('pertanyaan')->insert($data);

        return $new_pertanyaan;
    }

    public static function find_by_id($id) {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        return $pertanyaan;
    }

    public static function update($data) {
        $update_item = DB::table('pertanyaan')->where('id', $data['id'])->update($data);
        return $update_item;
    }

    public static function delete($id) {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->delete();
        return 'delete';
    }

}
?>