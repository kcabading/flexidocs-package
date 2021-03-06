<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  'built_in_version' => '7.6.1.0',
  'acceptable_sugar_versions' => 
    array(
      'regex_matches' => array('[7]\\.[0-9]\\.[0-9]\\.[0-9]$')
    ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'PRO',
    1 => 'CORP',
    2 => 'ENT',
    3 => 'ULT',
  ),
  'readme' => '',
  'key' => 'idoc',
  'author' => 'CRM Online Australia Pty Ltd',
  'description' => 'Flexidocs provides the most powerful document generation and electronic signing platform for SugarCRM. With complex document creatoin that combines seamlessly with all three major signing platforms, Intellidocs provides an end to end solution. Finally, signed documents are captured back into the CRM in real time with real time event capture throughout the process.',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'FlexiDocs for SugarCRM',
  'published_date' => 'PUBLISHED_DATE',
  'type' => 'module',
  'version' => 'PUBLISHED_VERSION',
  'remove_tables' => 'prompt',
);
$installdefs = array (
  'id' => 'IntelliDocs',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'idoc_signers',
      'class' => 'idoc_signers',
      'path' => 'modules/idoc_signers/idoc_signers.php',
      'tab' => false,
    ),
    1 => 
    array (
      'module' => 'idoc_events',
      'class' => 'idoc_events',
      'path' => 'modules/idoc_events/idoc_events.php',
      'tab' => false,
    ),
    2 => 
    array (
      'module' => 'idoc_documents',
      'class' => 'idoc_documents',
      'path' => 'modules/idoc_documents/idoc_documents.php',
      'tab' => false,
    ),
    3 => 
    array (
      'module' => 'idoc_templates',
      'class' => 'idoc_templates',
      'path' => 'modules/idoc_templates/idoc_templates.php',
      'tab' => false,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/idoc_documents_idoc_signers_idoc_documents.php',
      'to_module' => 'idoc_documents',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/idoc_documents_idoc_signersMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (    
    array (
      'from' => '<basepath>/SugarModules/modules/idoc_signers',
      'to' => 'modules/idoc_signers',
    ),    
    array (
      'from' => '<basepath>/SugarModules/modules/idoc_events',
      'to' => 'modules/idoc_events',
    ),    
    array (
      'from' => '<basepath>/SugarModules/modules/idoc_documents',
      'to' => 'modules/idoc_documents',
    ),
    array (
      'from' => '<basepath>/SugarModules/modules/idoc_templates',
      'to' => 'modules/idoc_templates',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/modules/Administration/Ext/Administration/intellidocs.php',
      'to' => 'custom/Extension/modules/Administration/Ext/Administration/intellidocs.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/modules/Opportunities/Ext/clients/base/views/recordlist/intellidocs.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/clients/base/views/recordlist/intellidocs.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/modules/Accounts/Ext/clients/base/views/recordlist/intellidocs.php',
      'to' => 'custom/Extension/modules/Accounts/Ext/clients/base/views/recordlist/intellidocs.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/modules/Leads/Ext/clients/base/views/recordlist/intellidocs.php',
      'to' => 'custom/Extension/modules/Leads/Ext/clients/base/views/recordlist/intellidocs.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/modules/Contacts/Ext/clients/base/views/recordlist/intellidocs.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/clients/base/views/recordlist/intellidocs.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/api/IntellidocsAPI.php',
      'to' => 'custom/clients/base/api/IntellidocsAPI.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/fields/intellidocs/intellidocs.js',
      'to' => 'custom/clients/base/fields/intellidocs/intellidocs.js',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/fields/intellidocs/detail.hbs',
      'to' => 'custom/clients/base/fields/intellidocs/detail.hbs',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/fields/flexilist/flexilist.js',
      'to' => 'custom/clients/base/fields/flexilist/flexilist.js',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/fields/flexilist/list-header.hbs',
      'to' => 'custom/clients/base/fields/flexilist/list-header.hbs',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/fields/idocreports/detail.hbs',
      'to' => 'custom/clients/base/fields/idocreports/detail.hbs',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/fields/idocreports/edit.hbs',
      'to' => 'custom/clients/base/fields/idocreports/edit.hbs',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/fields/idocreports/idocreports.js',
      'to' => 'custom/clients/base/fields/idocreports/idocreports.js',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/fields/Blockeditfield/Blockeditfield.js',
      'to' => 'custom/clients/base/fields/Blockeditfield/Blockeditfield.js',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/fields/Blockeditfield/detail.hbs',
      'to' => 'custom/clients/base/fields/Blockeditfield/detail.hbs',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/fields/Blockeditfield/edit.hbs',
      'to' => 'custom/clients/base/fields/Blockeditfield/edit.hbs',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/fields/Blockeditfield/list.hbs',
      'to' => 'custom/clients/base/fields/Blockeditfield/list.hbs',
    ),    
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/blockedit/blockedit.hbs',
      'to' => 'custom/clients/base/views/blockedit/blockedit.hbs',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/blockedit/blockedit.js',
      'to' => 'custom/clients/base/views/blockedit/blockedit.js',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/include/SugarFields/Fields/Blockeditfield/SugarFieldBlockeditfield.php',
      'to' => 'custom/include/SugarFields/Fields/Blockeditfield/SugarFieldBlockeditfield.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/layouts/blockedit/blockedit.php',
      'to' => 'custom/clients/base/layouts/blockedit/blockedit.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/modules/DynamicFields/templates/Fields/TemplateBlockeditfield.php',
      'to' => 'custom/modules/DynamicFields/templates/Fields/TemplateBlockeditfield.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/modules/DynamicFields/templates/Fields/Forms/Blockeditfield.php',
      'to' => 'custom/modules/DynamicFields/templates/Fields/Forms/Blockeditfield.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/modules/DynamicFields/templates/Fields/Forms/Blockeditfield.tpl',
      'to' => 'custom/modules/DynamicFields/templates/Fields/Forms/Blockeditfield.tpl',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/include/SugarFields/Fields/Blockeditfield/SugarFieldBlockeditfield.php',
      'to' => 'custom/include/SugarFields/Fields/Blockeditfield/SugarFieldBlockeditfield.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/intellidocslist',
      'to' => 'custom/clients/base/views/intellidocslist',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/layouts/intellidocslist',
      'to' => 'custom/clients/base/layouts/intellidocslist',
    ),
    // layouts
    array (
      'from' => '<basepath>/SugarModules/custom/modules/idoc_documents/clients/base/layouts/record/record.php',
      'to' => 'custom/modules/idoc_documents/clients/base/layouts/record/record.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/layouts/bn_drawer_record_view/bn_drawer_record_view.php',
      'to' => 'custom/clients/base/layouts/bn_drawer_record_view/bn_drawer_record_view.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/layouts/electronicsign/electronicsign.php',
      'to' => 'custom/clients/base/layouts/electronicsign/electronicsign.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/layouts/intellidocs/intellidocs.php',
      'to' => 'custom/clients/base/layouts/intellidocs/intellidocs.php',
    ),    
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/layouts/viewdocumentvariables/viewdocumentvariables.php',
      'to' => 'custom/clients/base/layouts/viewdocumentvariables/viewdocumentvariables.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/layouts/send-letters/send-letters.php',
      'to' => 'custom/clients/base/layouts/send-letters/send-letters.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/layouts/updateintellidocs/updateintellidocs.php',
      'to' => 'custom/clients/base/layouts/updateintellidocs/updateintellidocs.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/layouts/manageintellidocsdocuments/manageintellidocsdocuments.php',
      'to' => 'custom/clients/base/layouts/manageintellidocsdocuments/manageintellidocsdocuments.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/layouts/mergemultiple/mergemultiple.php',
      'to' => 'custom/clients/base/layouts/mergemultiple/mergemultiple.php',
    ), 
    // views
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/bn_drawer_record_view/bn_drawer_record_view.js',
      'to' => 'custom/clients/base/views/bn_drawer_record_view/bn_drawer_record_view.js',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/bn_drawer_record_view/bn_drawer_record_view.php',
      'to' => 'custom/clients/base/views/bn_drawer_record_view/bn_drawer_record_view.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/electronicsign/electronicsign.js',
      'to' => 'custom/clients/base/views/electronicsign/electronicsign.js',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/electronicsign/electronicsign.hbs',
      'to' => 'custom/clients/base/views/electronicsign/electronicsign.hbs',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/electronicsign/electronicsign.php',
      'to' => 'custom/clients/base/views/electronicsign/electronicsign.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/electronicsign/interactive.hbs',
      'to' => 'custom/clients/base/views/electronicsign/interactive.hbs',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/electronicsign/merge-and-sign.hbs',
      'to' => 'custom/clients/base/views/electronicsign/merge-and-sign.hbs',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/manageintellidocsdocuments/manageintellidocsdocuments.js',
      'to' => 'custom/clients/base/views/manageintellidocsdocuments/manageintellidocsdocuments.js',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/manageintellidocsdocuments/manageintellidocsdocuments.hbs',
      'to' => 'custom/clients/base/views/manageintellidocsdocuments/manageintellidocsdocuments.hbs',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/manageintellidocsdocuments/manageintellidocsdocuments.php',
      'to' => 'custom/clients/base/views/manageintellidocsdocuments/manageintellidocsdocuments.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/viewdocumentvariables/viewdocumentvariables.js',
      'to' => 'custom/clients/base/views/viewdocumentvariables/viewdocumentvariables.js',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/viewdocumentvariables/viewdocumentvariables.hbs',
      'to' => 'custom/clients/base/views/viewdocumentvariables/viewdocumentvariables.hbs',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/viewdocumentvariables/viewdocumentvariables.php',
      'to' => 'custom/clients/base/views/viewdocumentvariables/viewdocumentvariables.php',      
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/send-letters/send-letters.js',
      'to' => 'custom/clients/base/views/send-letters/send-letters.js',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/send-letters/send-letters.hbs',
      'to' => 'custom/clients/base/views/send-letters/send-letters.hbs',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/updateintellidocs/updateintellidocs.js',
      'to' => 'custom/clients/base/views/updateintellidocs/updateintellidocs.js',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/updateintellidocs/updateintellidocs.hbs',
      'to' => 'custom/clients/base/views/updateintellidocs/updateintellidocs.hbs',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/updateintellidocs/updateintellidocs.php',
      'to' => 'custom/clients/base/views/updateintellidocs/updateintellidocs.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/mergemultiple/mergemultiple.js',
      'to' => 'custom/clients/base/views/mergemultiple/mergemultiple.js',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/mergemultiple/mergemultiple.hbs',
      'to' => 'custom/clients/base/views/mergemultiple/mergemultiple.hbs',
    ),

    // custom fields view
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/intellidocs/intellidocs.js',
      'to' => 'custom/clients/base/views/intellidocs/intellidocs.js',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/intellidocs/intellidocs.hbs',
      'to' => 'custom/clients/base/views/intellidocs/intellidocs.hbs',
    ),    
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/intellidocsdashletrecord/intellidocsdashletrecord.js',
      'to' => 'custom/clients/base/views/intellidocsdashletrecord/intellidocsdashletrecord.js',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/intellidocsdashletrecord/intellidocsdashletrecord.hbs',
      'to' => 'custom/clients/base/views/intellidocsdashletrecord/intellidocsdashletrecord.hbs',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/clients/base/views/intellidocsdashletrecord/intellidocsdashletrecord.php',
      'to' => 'custom/clients/base/views/intellidocsdashletrecord/intellidocsdashletrecord.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/include/classes/intellidocs.php',
      'to' => 'custom/include/classes/intellidocs.php',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/modules/idoc_documents/clients/base/layouts/record/record.php',
      'to' => 'custom/modules/idoc_documents/clients/base/layouts/record/record.php',
    ),    
    array (
      'from' => '<basepath>/SugarModules/custom/images',
      'to' => 'custom/images',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/include/css/bootstrap-switch.min.css',
      'to' => 'custom/include/css/bootstrap-switch.min.css',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/include/javascript/bootstrap-switch.min.js',
      'to' => 'custom/include/javascript/bootstrap-switch.min.js',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/include/javascript/dropzone/dropzone.min.css',
      'to' => 'custom/include/javascript/dropzone/dropzone.min.css',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/include/javascript/dropzone/dropzone.min.js',
      'to' => 'custom/include/javascript/dropzone/dropzone.min.js',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/include/javascript/resizeableimage.js',
      'to' => 'custom/include/javascript/resizeableimage.js',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/Extension/modules/Home/clients/base/menus/header/intellidocs.php',
      'to' => 'custom/Extension/modules/Home/clients/base/menus/header/intellidocs.php',
    ),    
  ),
  'custom_fields' => array(
    //Checkbox
    array(
        'name' => 'multidoc_c',
        'label' => 'LBL_MULTIDOC',
        'type' => 'bool',
        'module' => 'idoc_documents',
        'default_value' => false, // true or false
        'help' => 'Multi document',
        'comment' => 'Multi document',
        'audited' => false, // true or false
        'mass_update' => false, // true or false
        'duplicate_merge' => false, // true or false
        'reportable' => true, // true or false
        'importable' => 'true', // 'true', 'false' or 'required'
    ),
    array(
        'name' => 'signer_id_c',
        'label' => 'LBL_SIGNER_ID',
        'type' => 'varchar',
        'module' => 'idoc_events',
        'help' => 'Signer ID',
        'comment' => 'Signer ID',
        'default_value' => '',
        'max_size' => 255,
        'required' => false, // true or false
        'reportable' => true, // true or false
        'audited' => false, // true or false
        'importable' => 'true', // 'true', 'false', 'required'
        'duplicate_merge' => false, // true or false
    ),
  ),
  'language' => 
  array (
    array (
      'from' => '<basepath>/SugarModules/relationships/language/idoc_signers.php',
      'to_module' => 'idoc_signers',
      'language' => 'en_us',
    ),
    array (
      'from' => '<basepath>/SugarModules/relationships/language/idoc_documents.php',
      'to_module' => 'idoc_documents',
      'language' => 'en_us',
    ),
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    array (
      'from' => '<basepath>/SugarModules/language/en_us.IntellidocsAdmin.php',
      'to_module' => 'Administration',
      'language' => 'en_us',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/include/language/en_us.Intellidocs.php',
      'to_module' => 'idoc_documents',
      'language' => 'en_us',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/modules/DynamicFields/en_us.Intellidocs.php',
      'to_module' => 'DynamicFields',
      'language' => 'en_us',
    ),
    array (
      'from' => '<basepath>/SugarModules/custom/modules/ModuleBuilder/en_us.Intellidocs.php',
      'to_module' => 'ModuleBuilder',
      'language' => 'en_us',
    ),
  ),
  'sidecar' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/idoc_documents_idoc_signers_idoc_documents.php',
      'to_module' => 'idoc_documents',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/idoc_documents_idoc_signers_idoc_documents.php',
      'to_module' => 'idoc_documents',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/idoc_documents_idoc_signers_idoc_documents.php',
      'to_module' => 'idoc_documents',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/idoc_documents_idoc_signers_idoc_signers.php',
      'to_module' => 'idoc_signers',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
  'wireless_subpanels' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/idoc_documents_idoc_signers_idoc_documents.php',
      'to_module' => 'idoc_documents',
    ),
  ),
);