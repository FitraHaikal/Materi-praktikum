<?php

abstract class mahasiswa
{
    abstract protected function getTugasAkhir();
    abstract protected function getProgram($postfix);

    public function tugasAkhir()
    {
        print $this->getTugasAkhir() . "<br>";
    }
}

class sarjana extends mahasiswa
{
        protected function getTugasAkhir()
        {
        return "Skripsi";
        }

        public function getProgram($postFix)
        {
            print "{$postFix} S1";
        }
}

class magister extends mahasiswa
{
    protected function getTugasAkhir()
    {
        return "Tesis";
    }
    
    public function getProgram($postFix) 
    {
        print "{$postFix} S2";
    }
}
?>