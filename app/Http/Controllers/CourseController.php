<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Http\Resources\CourseCollection;
use App\Http\Resources\CourseResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $users = Course::all();
        return (new CourseCollection($users))->response();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request): JsonResponse
    {
        // $this->authorize('store', $course);
        
        $course = new Course();

        $course->nombre = $request->input('nombre');
        $course->cantidad_creditos = $request->input('cantidad_creditos');
        $course->nombre_docente = $request->input('nombre_docente');
        $course->prerrequisito = $request->input('prerrequisito');
        $course->trabajo_autonomo = $request->input('trabajo_autonomo');
        $course->trabajo_dirigido = $request->input('trabajo_dirigido');
        $course->programa = $request->input('programa');
        $course->semestre = $request->input('semestre');
        $course->save();

        return (new CourseResource($course))->response()->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course): JsonResponse
    {
        return (new CourseResource($course))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course): JsonResponse
    {
        // $this->authorize('update', $course);
        
        $course->nombre = $request->input('nombre');
        $course->cantidad_creditos = $request->input('cantidad_creditos');
        $course->nombre_docente = $request->input('nombre_docente');
        $course->prerrequisito = $request->input('prerrequisito');
        $course->trabajo_autonomo = $request->input('trabajo_autonomo');
        $course->trabajo_dirigido = $request->input('trabajo_dirigido');
        $course->programa = $request->input('programa');
        $course->semestre = $request->input('semestre');
        $course->save();
        
        return (new CourseResource($course))->response();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course): Response
    {
        // $this->authorize('delete', $course);
        
        $course->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
