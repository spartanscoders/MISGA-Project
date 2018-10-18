

<?php
class course_selection_model extends CI_Model
{

 function fetch_levels()
 {
  $this->db->order_by("levelID", "ASC");
  $query = $this->db->get("tbl_levels");
  return $query->result();

}

function fetch_subjects($levelID)
{
  $this->db->where('levelID', $levelID);
  $this->db->order_by('sub_desc', 'ASC');
  $query = $this->db->get('tbl_subjects');
  $output = '<option value="">Select Subject</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->subID.'">'.$row->sub_desc.'</option>';
 }
 return $output;
}

function fetch_modules($subID)
{
  $this->db->where('subID', $subID);
  $this->db->order_by('module_desc', 'ASC');
  $query = $this->db->get('tbl_modules');
  $output = '<option value="">Select Module</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->moduleID.'">'.$row->module_desc.'</option>';
 }
 return $output;
}

function fetch_lessons($moduleID)
{ 
  $this->db->where('moduleID', $moduleID);
  $this->db->order_by('lesson_desc', 'ASC');
  $query = $this->db->get('tbl_lessons');
  $output = '<option value="">Select Lesson</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->lessonID.'">'.$row->lesson_desc.'</option>';
 }
 return $output;
}

function fetch_selected_lesson($lessionID) {

    $this->db->where('lessonID', $lessionID);
    $query = $this->db->get('tbl_lessons');
    return $query->row();

}

}







