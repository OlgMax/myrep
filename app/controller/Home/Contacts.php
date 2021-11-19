<?php
namespace Controller\Home;
use Models\Contacts as ContactsModel;
use Controller\Controller;
use Helper\GlobalFilters;


class Contacts extends Controller
{
    public function Index()
    {
        $contactsModel = new ContactsModel();
        $this->generate('/home/contacts/index', $contactsModel->getContacts(GlobalFilters::postFilter()));
    }

}
