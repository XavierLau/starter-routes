<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class FourHooks

{

    function Four_sentence()
    {      
        
             
        $this->CI =& get_instance();
        $page = $this->CI->output->get_output();      
        $docs  = new DOMDocument();
        $docs->loadHTML($page);
       

   

        foreach($docs->getElementsByTagName('p') as $selection)
        {         
            if($selection->getAttribute('class') == 'lead')
            {                
                $tmp = $selection->textContent;
                $word = $this->translate_hooks(explode(' ', $tmp), $docs);
                $this->edit_hooks($selection, $word);
            }
        }

        echo $docs->saveHTML();
    }

    
    function edit_hooks($selection, $word)
    {
        $selection->nodeValue = '';
        foreach($word as $node)
        {      
            $selection->appendChild($node);
        }
    }


    function translate_hooks($four, $docs)
    {
        $Rexpression = '/[a-zA-Z]{4}/';
        foreach($four as $word)
        {
            $storage = $docs->createElement("something", $word . ' ');

            if(strlen($word)==4 && preg_match($Rexpression, $word))
            {
                $storage = $docs->createElement("whatever", '####' . ' ');
            }
            $fours[] = $storage;
        }

        return $fours;
    }
}