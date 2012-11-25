<?php




class PdfExportController extends Zend_Controller_Action
{


	public function init ()
	{
		/* Initialize action controller here */
	}


	public function indexAction ()
	{
//		require_once 'linkedin.php';
	}

	public function exportAction ()
	{
//		// create PDF
//		$pdf = new Zend_Pdf();
//		// create A4 page
//		$page = new Zend_Pdf_Page(Zend_Pdf_Page::SIZE_A4);
//
//		// define font resource
//		$font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_HELVETICA);
//
//		// set font for page
//		// write text to page
//		$page->setFont($font, 24)
//			 ->drawText('That which we call a rose,', 72, 720)
//			 ->drawText('By any other name would smell as sweet.', 72, 620);
//
//		// add page to document
//		$pdf->pages[] = $page;
//		$filename = 'downloads/resume_'.date('Y_m_d_H_i_s',time()).'.pdf'; 
//		$pdf->save($filename);
//
//		$this->_helper->layout->disableLayout();
//		$this->_helper->viewRenderer->setNoRender();
//
//		$pdf = Zend_Pdf::load($filename);
//
//		$this->getResponse()->setHeader('Content-type', 'application/x-pdf', true);
//		$this->getResponse()->setHeader('Content-disposition', 'inline; filename=your_resume.pdf', true);
//		$this->getResponse()->setBody($pdf->render());
		
		
		
		$html = '<table_ border="1"><tr_><td_>Пример 1</td_><td_>Пример 2</td_><td_>Пример 3</td_><td_>Пример 4</td_></tr_>
		<tr_><td_>Пример 5</td_><td_>Пример 6</td_><td_>Пример 7</td_><td_><a_ href="http://mpdf.bpm1.com/" title="mPDF">mPDF</a_></td_></tr_></table_>';

//		include(APPLICATION_PATH . "/../MPDF53/mpdf.php");

		$mpdf = new mPDF('utf-8', 'A4', '8', '', 10, 10, 7, 7, 10, 10); /*задаем формат, отступы и.т.д.*/
		$mpdf->charset_in = 'cp1251'; /*не забываем про русский*/

//		$stylesheet = file_get_contents('style.css'); /*подключаем css*/
//		$mpdf->WriteHTML($stylesheet, 1);

		$mpdf->list_indent_first_level = 0;
		$mpdf->WriteHTML($html, 2); /*формируем pdf*/
		$mpdf->Output('mpdf.pdf', 'I');
		
	}
}


