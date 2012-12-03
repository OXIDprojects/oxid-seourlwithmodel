<?php
class seoUrlWithModel extends seoUrlWithModel_parent
{
	/**
	 * Returns new seo url including the model no.
	 *
     *
     * @param oxArticle  $oArticle  article object
     * @param oxCategory $oCategory category object
     * @param int        $iLang     language to generate uri for
     *
     * @return string
     */
    protected function _createArticleCategoryUri( $oArticle, $oCategory, $iLang )
    {
        startProfile(__FUNCTION__);
        $oArticle = $this->_getProductForLang( $oArticle, $iLang );

        // create title part for uri
        $sTitle = $this->_prepareArticleTitle( $oArticle );
        $sTitle = str_replace($this->_getUrlExtension(), " ".$oArticle->oxarticles__oxartnum->value, $sTitle).".".$this->_getUrlExtension();

        // writing category path
        $sSeoUri = $this->_processSeoUrl($sTitle,
                            $oArticle->getId(), $iLang
                        );
        $sCatId = $oCategory->getId();
        $this->_saveToDb(
                    'oxarticle',
                    $oArticle->getId(),
                    oxUtilsUrl::getInstance()->appendUrl(
                            $oArticle->getBaseStdLink( $iLang ),
                            array( 'cnid' => $sCatId )
                    ),
                    $sSeoUri,
                    $iLang,
                    null,
                    0,
                    $sCatId
                );

        stopProfile(__FUNCTION__);

        return $sSeoUri;
    }
}