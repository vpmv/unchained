<?php

namespace App\System\Application\Module;

class DetailModule extends AbstractModule
{
    public function getName(): string
    {
        return 'detail';
    }

    public function prepare()
    {
        if (!$this->data || key($this->data) != 'pk') {
            $this->output['redirect'] = $this->container->getPublicUri(null, true);

            return;
        }


        // TODO
        $pointers = [];
        /*if (false && $pointers = $this->container->getPointers()) {
            foreach ($this->data as $field) {
                foreach ($pointers as $pointer) {
                    $pointers[] = $pointer + [
                            'hasData' => false,
                            'hasLink' => true,
                        ];
                }
            }
        }*/

        $this->output = [
            'data'     => $this->data,
            'pointers' => $pointers,
        ];
    }
}