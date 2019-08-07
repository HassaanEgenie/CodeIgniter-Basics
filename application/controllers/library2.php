<?
Class library2 extends CI_Controller{

    public function index(){
        $this->load->library('table');

        $this->table->set_heading('Name', 'Color', 'Size');
        $this->table->add_row('Fred', 'Blue', 'Small');
        $this->table->add_row('Mary', 'Red', 'Large');
        $this->table->add_row('John', 'Green', 'Medium');

        $template = array(
            'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">'
    );

    $this->table->set_template($template);

        echo $this->table->generate();

    }
}
?>
