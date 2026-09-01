<?php

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Load required libraries
        $this->load->database();
        $this->load->library('session');
        $this->load->library('form_validation');
    }


    public function send()
    {
        // ==============================
        // VALIDATION RULES
        // ==============================

        // Full Name
        $this->form_validation->set_rules(
            'name',
            'Full Name',
            'required|trim|regex_match[/^[a-zA-Z ]+$/]',
            array(
                'required' => 'Full Name is required.',
                'regex_match' => 'Full Name can contain only letters and spaces.'
            )
        );


        // Email
        $this->form_validation->set_rules(
            'email',
            'Email Address',
            'required|trim|valid_email',
            array(
                'required' => 'Email Address is required.',
                'valid_email' => 'Please enter a valid email address.'
            )
        );


        // Phone - OPTIONAL
        $this->form_validation->set_rules(
            'phone',
            'Phone Number',
            'trim|regex_match[/^[0-9]{10}$/]',
            array(
                'regex_match' => 'Phone Number must contain exactly 10 digits.'
            )
        );


        // Subject
        $this->form_validation->set_rules(
            'subject',
            'Subject',
            'required|trim|min_length[3]',
            array(
                'required' => 'Subject is required.',
                'min_length' => 'Subject must contain at least 3 characters.'
            )
        );


        // Message
        $this->form_validation->set_rules(
            'message',
            'Message',
            'required|trim|min_length[10]',
            array(
                'required' => 'Message is required.',
                'min_length' => 'Message must contain at least 10 characters.'
            )
        );


        // ==============================
        // CHECK VALIDATION
        // ==============================

        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata(
                'error',
                validation_errors()
            );

            redirect('home/contact');

            return;
        }


        // ==============================
        // VALID DATA
        // ==============================

        $data = array(
            'name'    => $this->input->post('name', TRUE),
            'email'   => $this->input->post('email', TRUE),
            'phone'   => $this->input->post('phone', TRUE),
            'subject' => $this->input->post('subject', TRUE),
            'message' => $this->input->post('message', TRUE)
        );


        // ==============================
        // INSERT INTO DATABASE
        // ==============================

        if ($this->db->insert('contact_form', $data))
        {
            $this->session->set_flashdata(
                'msg',
                'Message sent successfully!'
            );
        }
        else
        {
            $this->session->set_flashdata(
                'error',
                'Unable to send message. Please try again.'
            );
        }


        // ==============================
        // REDIRECT
        // ==============================

        redirect('home/contact');
    }
}