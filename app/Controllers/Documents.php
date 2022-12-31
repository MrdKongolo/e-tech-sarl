<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Documents extends BaseController
{
    public $docModel;

    public function __construct(){
        $this->docModel = model(DocumentModel::class);
    }

    public function list()
    {
        $data = [
            'documents' => $this->docModel->findAll(),
        ];
        return view('documents/admin/list',$data);
    }

    public function createDocument(){
        $data = [
            'title' => 'Ajout nouveau document',
        ];
        $rules = $this->docModel->getValidationRules();
        if ($this->request->getMethod() === 'post' && $this->validate($rules)) {
                 
                $file = $this->request->getFile('file');

                if ($file->isValid() && !$file->hasMoved()) {
                $fileName = $file->getName();
                
                $data = array(
                    'name' => $this->request->getVar('name'),
                    'file' => $fileName,
                    'created_at' => date('Y-m-d : H:i'),
                );  
                
                $this->docModel->save($data);
                $file->move('./resources/documents', $fileName);
                $session = session();
                $session->setFlashData("success", "Document ajouté avec succès");
                return redirect()->to('/dashboard');                    
            }                 
        } else {
            $data['validation'] = $this->validation->getErrors();
        }

        return view('documents/admin/create',$data);
    }
    function delete($id){
        $doc = $this->docModel->findDocumentByID($id);
        $oldfile = $doc['file'];
        $path = './resources/documents';  
        
        if(!empty($doc)){

            if(file_exists($path .'/'. $oldfile) && $oldfile !== null){
                unlink($path .'/'. $oldfile);
            }
            $this->docModel->where('doc_id',$id)->delete();
            return redirect()->to('documents')->with("success", "document supprimé avec succès");
        }else {
            return redirect()->back();
        }
    }
}
