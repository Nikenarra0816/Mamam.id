//nama class harus sama dengan nama file dan diawali dengan huruf besar
class Register extends CI_Controller {
 
public function index()
{
$this->load->helper(array('captcha','url'));
$this->load->library('session');
$vals = array(
'img_path' => './captcha/',
'img_url' => base_url().'captcha/',
'img_width' => 170,
'img_height' => 45
);
$cap = create_captcha($vals);
$this->session->set_userdata('keycode',md5($cap['word']));
$data['captcha_img'] = $cap['image'];
$this->load->view('v_register',$data);
}
 
}