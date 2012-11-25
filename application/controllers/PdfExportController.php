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
		// create PDF
		$pdf = new Zend_Pdf();
		
		$useremail = $this->_getParam('email');
		
		// create A4 page
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
		
		switch ($useremail) {
			case 'david.braun@gmail.com':
				$filename = 'downloads/david.pdf'; 
				break;
			case 'dhenzel@netdna.com':
				$filename = 'downloads/dhenzel.pdf'; 
				break;
			case 'bruno@prestashop.com':
				break;

		}
		
		$filename = 'downloads/david1.pdf'; 
		
//		$pdf->save($filename);

		$this->_helper->layout->disableLayout();
		$this->_helper->viewRenderer->setNoRender();

		$pdf = Zend_Pdf::load($filename);

		$this->getResponse()->setHeader('Content-type', 'application/x-pdf', true);
		$this->getResponse()->setHeader('Content-disposition', 'inline; filename=your_resume.pdf', true);
		$this->getResponse()->setBody($pdf->render());
		

		
	}
}


