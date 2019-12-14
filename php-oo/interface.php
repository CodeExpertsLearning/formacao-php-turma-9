<?php 

interface Export
{
    public function export();
}

class PdfExport implements Export
{
    public function export()
    {
        return 'Expotando para PDF';
    }
}

class ExcellExport implements Export
{
    public function export()
    {
        return 'Expotando para Excell';
    }
}

class Relatorio
{
    public function exportarDados(Export $export)
    {
        return $export->export();
    }
}

$export = new PdfExport();
print (new Relatorio())->exportarDados($export);
