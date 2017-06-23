<?php

namespace app\modules\users\controllers;

use app\models\Category;
use app\models\ImageUpload;
use app\models\SignupForm;
use Yii;
use app\modules\users\models\Article;
use app\modules\users\models\ArticleSearch;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\User;
use yii\web\UploadedFile;
use app\modules\users\models\UploadForm;


/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends AppUserAdminController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Article models.
     * @param integer $id
     * @return mixed
     */
    public function actionIndex(){

        $searchModel = new ArticleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Article model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Article model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new Article();
        $model->user_id = Yii::$app->user->getId();
        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            $image=UploadedFile::getInstance($model, 'image');
            $imageName = strtolower(md5(uniqid($model->image->baseName))). '.' .$image->getExtension();
            $image->saveAs(Yii::getAlias('@web'). 'uploads/'.$imageName);
            $model->image = $imageName;
            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }





//    public function actionCreate($id)
//    {
//        $model = new Article();
//        $model->user_id = Yii::$app->user->getId();
//        if ($model->load(Yii::$app->request->post())) {
////            if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            $model->file=UploadedFile::getInstance($model, 'file');
//            $model->file->saveAs('uploads/'. $model->id. $model->file->baseName . '.' .$model->file->extension);
//            $model->image = $model->file->baseName . '.' .$model->file->extension;
//            $model->save();
//
//            return $this->redirect(['view', 'id' => $model->id]);
//        } else {
//            return $this->render('create', [
//                'model' => $model,
//            ]);
//        }
//    }

    /**
     * Updates an existing Article model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            $model->file=UploadedFile::getInstance($model, 'file');
            $model->file->saveAs('uploads/'. $model->file->baseName . '.' .$model->file->extension);
            $model->image = $model->file->baseName . '.' .$model->file->extension;
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Article model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index','id'=>Yii::$app->user->id]);
    }

    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionSignup()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

}
