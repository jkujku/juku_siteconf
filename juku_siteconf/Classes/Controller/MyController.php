<?php

namespace DelphiIMM\JukuSiteconf\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2020 delphi-imm.de
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

class MyController extends ActionController {
	public function filterAction() {
		if($this->request->hasArgument('param0')) $this->view->assign("param0", $this->request->getArgument('param0'));
		if($this->request->hasArgument('param1')) $this->view->assign("param1", $this->request->getArgument('param1'));
		if($this->request->hasArgument('param2')) $this->view->assign("param2", $this->request->getArgument('param2'));
	}
}
