<?php
if (!$this->input->is_ajax_request()) {
    //redirect('home');
}
$user_id = 1;
$filter_type = 'id.0-9';

$table_name = $this->db->dbprefix.'backlinks_pending';
$table_name_union = $this->db->dbprefix.'sisterpages';

switch($filter_type) {
    case 'id.0-9': $sql = "SELECT id, link, anchortag FROM $table_name WHERE user_id = :user_id ORDER BY id"; break;
    case 'id.9-0': $sql = "SELECT id, link, anchortag FROM $table_name WHERE user_id = :user_id ORDER BY id DESC"; break;
    case 'link.a-z': $sql = "SELECT id, link, anchortag FROM $table_name WHERE user_id = :user_id ORDER BY username"; break;
    case 'link.z-a': $sql = "SELECT id, link, anchortag FROM $table_name WHERE user_id = :user_id ORDER BY username DESC"; break;
    case 'anchortag.a-z': $sql = "SELECT id, link, anchortag FROM $table_name WHERE user_id = :user_id ORDER BY anchortag"; break;
    case 'anchortag.z-a': $sql = "SELECT id, link, anchortag FROM $table_name WHERE user_id = :user_id ORDER BY anchortag DESC"; break;
    case 'sister.0-9': $sql = "SELECT id, link, anchortag FROM $table_name WHERE user_id = :user_id ORDER BY sister_id"; break;
    case 'sister.9-0': $sql = "SELECT id, link, anchortag FROM $table_name WHERE user_id = :user_id ORDER BY sister_id DESC"; break;

    default: $sql = "SELECT id, link, anchortag FROM $table_name WHERE user_id = :user_id ORDER BY id";
}

$backlinks = db_query($sql, array('user_id' => $user_id));
echo json_encode($backlinks);
