<?php

    class HG_API
    {
        private function Request( $endpoint = '' )
        {
            $url = 'https://api.hgbrasil.com/' . $endpoint . '?format=json';
            $pag = @file_get_contents($url);
            return json_decode($pag, true);
        }

        private function Moeda( $moeda )
        {
            $results = $this->Request('finance');
            return $results['results']['currencies'][$moeda];
        }

        public function GetClima()
        {
            $results = $this->Request('weather');
            return $results['results'];
        }

        public function GetDolar()
        {
            return $this->Moeda('USD');
        }
    }
?>