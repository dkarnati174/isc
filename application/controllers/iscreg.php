<?phpclass iscreg extends CI_Controller{    public function index()    {        $this->load->model('iscmar_model');        $data['title'] = "International Student Center";        $date = date_default_timezone_set('US/Eastern');        $this->load->view('registration', $data);    }    public function register(){        date_default_timezone_set('US/Eastern');        $date = date("m/d/Y");        $user_name = $_POST['name'];        $email = $_POST['email'];     $data = array(            'memName'   => $_POST['name'],            'emailId'    => $_POST['email'],            'address'=> $_POST['address'],            'status'     => 0        );/*        $data = array(            'userName'   =>"dheeraj",            'emailId'    => "dheeraj.edu@gmail.com",            'address'=> "11 Spruce street, Poughkeepsie, NY",            'status'     => 0        );*/        $this->load->model('iscmar_model');        $result = $this->iscmar_model->insert_user($data, 'member');        if($result>0){            $this->load->library('email');            $config['protocol'] = "smtp";            $config['smtp_host'] = "tls://smtp.googlemail.com";            $config['smtp_port'] = "465";            $config['smtp_user'] = "dheerajkarnati59@gmail.com";            $config['smtp_pass'] = "";            $config['charset'] = "utf-8";            $config['mailtype'] = "html";            $config['newline'] = "\r\n";            $this->email->initialize($config);            $this->email->from('dheerajkarnati59@gmail.com', ' International Student Center');            $this->email->to($_POST['email']);              $this->email->cc('dheeraj.edu@gmail.com');            $this->email->subject('Welcome to International Student Center@Marist College');               $url = "http://localhost:9090/isc/?c=iscreg&m=activate&userid="."281".$result."121";            $message = '<html><body>';            $message .= '<table width="100%"; rules="all" style="border:1px solid #3A5896;" cellpadding="10">';            $message .= "<tr ><td align='center'><h3>International Student Center</h3><h3>MARIST COLLEGE</h3> ";            $message .= "<br/><br/> <h4>Hi $user_name,<br /><br /> You have been successfully registered to International Student Center @ Marist College. Please click on the below link to activate your account</h4><br/> <I>Link:</I><br/> <a href='$url' >$url </a></></tr>";            $message .= "</table>";            $message .= "</body></html>";            $this->email->message($message);            if(  $this->email->send()){                echo $result;            }else{                echo 0;            }        }else{            echo 0;        }    }    public function activate(){        $userid = $this ->input ->get("userid");        if($userid>0){            $this->load->view('home');        }    }    public function forums(){        $this->load->view('forums');    }    public function projects(){        $this->load->view('projects');    }    public function events(){        $this->load->view('events');    }    public function financing(){        $this->load->view('financing');    }    public function home(){        $this->load->view('homepage');    }}?>