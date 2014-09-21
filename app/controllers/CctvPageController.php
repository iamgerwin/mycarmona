<?php
    use Alas\Repo\DbCctvRepo;

    /**
 * Created by PhpStorm.
 * User: johngerwindelasalas
 * Date: 9/20/14
 * Time: 9:40 PM
 */

class CctvPageController extends BaseController{

    protected $cctvRepo;
    /**
     * @param DbCctvRepo $cctvRepo
     */
    public function __construct(DbCctvRepo $cctvRepo)
    {
        $this->cctvRepo = $cctvRepo;
    }

    public function index()
    {
        $cctvs = $this->cctvRepo->getAll('name',['name','location','id']);

        return View::make('dashboard.cctv.index', compact('cctvs'));
    }

    public function edit($id)
    {
        $cctv = $this->cctvRepo->getById($id);

        return View::make('dashboard.cctv.edit', compact('cctv'));
    }

    public function update($id)
    {
        $this->cctvRepo->updateById($id,Input::only(['name','location','description','link','active']));
        return Redirect::back();
    }
} 