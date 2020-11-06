<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourse_outlinesRequest;
use App\Http\Requests\UpdateCourse_outlinesRequest;
use App\Models\Course;
use App\Repositories\Course_outlinesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;

use Auth;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Course_outlinesController extends AppBaseController
{
    /** @var  Course_outlinesRepository */
    private $courseOutlinesRepository;

    public function __construct(Course_outlinesRepository $courseOutlinesRepo)
    {
        $this->courseOutlinesRepository = $courseOutlinesRepo;
    }

    /**
     * Display a listing of the Course_outlines.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->courseOutlinesRepository->pushCriteria(new RequestCriteria($request));
        $courseOutlines = $this->courseOutlinesRepository->all();

        return view('course_outlines.index')
            ->with('courseOutlines', $courseOutlines);
    }

    /**
     * Show the form for creating a new Course_outlines.
     *
     * @return Response
     */
    public function create()
    {
        $courses=Course::all();
        return view('course_outlines.create')->with('courses',$courses);
    }

    /**
     * Store a newly created Course_outlines in storage.
     *
     * @param CreateCourse_outlinesRequest $request
     *
     * @return Response
     */
    public function store(CreateCourse_outlinesRequest $request)
    {
//        $input = $request->all();
        $input = $request->all();
        $input['user_id']=Auth::user()->id;

        $courseOutlines = $this->courseOutlinesRepository->create($input);

        Flash::success('Course Outlines saved successfully.');

        return redirect(route('courseOutlines.index'));
    }

    /**
     * Display the specified Course_outlines.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $courseOutlines = $this->courseOutlinesRepository->findWithoutFail($id);

        if (empty($courseOutlines)) {
            Flash::error('Course Outlines not found');

            return redirect(route('courseOutlines.index'));
        }

        return view('course_outlines.show')->with('courseOutlines', $courseOutlines);
    }

    /**
     * Show the form for editing the specified Course_outlines.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $courseOutlines = $this->courseOutlinesRepository->findWithoutFail($id);

        if (empty($courseOutlines)) {
            Flash::error('Course Outlines not found');

            return redirect(route('courseOutlines.index'));
        }
        $courses=Course::all();
        return view('course_outlines.edit')->with('courseOutlines', $courseOutlines)->with('courses',$courses);
    }

    /**
     * Update the specified Course_outlines in storage.
     *
     * @param  int              $id
     * @param UpdateCourse_outlinesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCourse_outlinesRequest $request)
    {
        $courseOutlines = $this->courseOutlinesRepository->findWithoutFail($id);

        if (empty($courseOutlines)) {
            Flash::error('Course Outlines not found');

            return redirect(route('courseOutlines.index'));
        }

        $courseOutlines = $this->courseOutlinesRepository->update($request->all(), $id);

        Flash::success('Course Outlines updated successfully.');

        return redirect(route('courseOutlines.index'));
    }

    /**
     * Remove the specified Course_outlines from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $courseOutlines = $this->courseOutlinesRepository->findWithoutFail($id);

        if (empty($courseOutlines)) {
            Flash::error('Course Outlines not found');

            return redirect(route('courseOutlines.index'));
        }

        $this->courseOutlinesRepository->delete($id);

        Flash::success('Course Outlines deleted successfully.');

        return redirect(route('courseOutlines.index'));
    }
}
