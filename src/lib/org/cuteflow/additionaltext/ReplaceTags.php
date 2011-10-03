<?php
/**
 * Class replaces Spaceholder from Textfields and Additional Textes
 * TODO rela: rename
 */
class ReplaceTags {

    public $workflow;
    public $theSender;
    public $newText;
    public $culture;
    public $workflowVersion;


    /**
     *
     * @param int $versionId, id of the current workflow
     * @param String $text, the text to replace
     * @param String $culture, the language
     * @param sfContext $context , context object
     * TODO rela: Code in getText() auslagern
     */
    public function __construct($versionId, $text, $culture, $context = false) {
        
        require_once sfConfig::get('sf_root_dir') . '/lib/vendor/symfony/helper/DateHelper.php';   
        
        $this->setWorkflow($versionId);
        $this->setWorkflowVersion($versionId);
        $this->culture = $culture;
        $this->theSender = new UserMailSettings($this->workflow['sender_id']);
        $this->newText = $this->replacePlaceholder($text);
    }

    public function getText() {
        return $this->newText;
    }

    public function setWorkflow($versionId) {
        $this->workflow = WorkflowTemplateTable::instance()
                ->getWorkflowTemplateByVersionId($versionId)
                ->getFirst();
    }

    public function setWorkflowVersion($versionId) {
        $this->workflowVersion = WorkflowVersionTable::instance()
                ->getWorkflowVersionById($versionId)
                ->getFirst();
    }

    /**
     * Replace the tags
     *
     * @param string $text, text to replace
     * @return string $text, $text replaced
     */
    protected function replacePlaceholder($text) {
        $date = format_date(time(), 'g', $this->culture);
        $text = str_replace('{%CIRCULATION_TITLE%}', $this->workflow['name'], $text);
        $text = str_replace('{%CIRCULATION_ID%}', $this->workflow['id'], $text);
        $text = str_replace('{%SENDER_USERNAME%}', $this->theSender->userData['username'], $text);
        $text = str_replace('{%SENDER_FULLNAME%}', $this->theSender->userData['firstname'] . ' ' . $this->theSender->userData['lastname'], $text);
        $text = str_replace('{%TIME%}', format_date(time(), 'g', $this->culture), $text);
        $text = str_replace('{%DATE_SENDING%}', format_date($this->workflowVersion['start_workflow_at'], 'g', $this->culture), $text);
        return $text;
    }






}

