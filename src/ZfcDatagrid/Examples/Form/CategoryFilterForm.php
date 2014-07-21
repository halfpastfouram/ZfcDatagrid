<?php
namespace ZfcDatagrid\Examples\Form;

use Zend\Form\Form;
// use Zend\InputFilter\Factory as InputFactory; // <-- Add this import
// use Zend\InputFilter\InputFilter; // <-- Add this import
use Zend\InputFilter\InputFilterAwareInterface; // <-- Add this import
use Zend\InputFilter\InputFilterInterface; // <-- Add this import
class CategoryFilterForm extends Form implements InputFilterAwareInterface
{

    public function __construct($name = null)
    {
        parent::__construct('categoryFilter');

        $this->setAttribute('method', 'post');
        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type' => 'hidden'
            )
        ));
        $this->add(array(
            'name' => 'artist',
            'attributes' => array(
                'type' => 'text'
            ),
            'options' => array(
                'label' => 'Artist'
            )
        ));
        $this->add(array(
            'name' => 'title',
            'attributes' => array(
                'type' => 'text'
            ),
            'options' => array(
                'label' => 'Title'
            )
        ));
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Go',
                'id' => 'submitbutton'
            )
        ));
    }

    // Add content to this method:
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("Not used");
    }

    public function getInputFilter()
    {
        return array();
    }
}
