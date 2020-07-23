<?php
      
      $extbaseFrameworkConfiguration = $this->configurationManager->getConfiguration(\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);
      $partialRootPath = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($extbaseFrameworkConfiguration['view']['templateRootPaths'][0]);
      $templatePathAndFilename = $partialRootPath . 'Api/Kalender.html';
      $this->view->setTemplatePathAndFilename($templatePathAndFilename);
      $html = $this->view->render();
      $output = array("html"=>$html);
?>