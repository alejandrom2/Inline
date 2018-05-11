<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Tasks;
use App\Deliverable;
use App\Reference;
use App\Requirements;
use App\Issues;
use App\Risk;

use App\Http\Requests\TaskRequest;
use App\Http\Requests\DeliverableRequest;
use App\Http\Requests\ReferenceDocumenetRequest;
use App\Http\Requests\RequirementRequest;
use App\Http\Requests\IssueRequest;
use App\Http\Requests\RisksRequest;

use Session;


class DashboardController extends Controller
{


    /**
     * Tasks Get, Create Page, Post Create with Validation
     * 
     */
    public function getTasks()
    {
        $tasks = Tasks::all();
        return view('task',compact('tasks'));
    }
    public function getTaskCreate()
    {
        $tasks = Tasks::all();
        return view('task-create',compact('tasks'));
    }
    public function postTaskCreate(TaskRequest $request)
    {
        Tasks::create([
            'name'               => $request['name'],
            'resource_assigned'  => $request['resource_assigned'],
            'start_date'         => Carbon::parse($request['start_date']),
            'end_date'           => Carbon::parse($request['end_date']),
            'description'        => $request['description'],
            'status_description' => $request['status_description'],
            'status'             => $request['status'],
        ]);
        Session::flash('message', "Task Created Successfully");

        return redirect()->route('getTasks');
    }

    /**
     * Deliverables Get, Create Page, Post Create with Validation
     */

    public function getDeliverables()
    {
        $deliverables = Deliverable::all();
        return view('deliverables',compact('deliverables'));
    }
    public function getDeliverableCreate()
    {
        $deliverables = Deliverable::all();
        return view('deliverable-create',compact('deliverables'));
    }
    public function postDeliverableCreate(DeliverableRequest $request)
    {
        Deliverable::create([
            'status'        => $request['status'],
            'name'          => $request['name'],
            'description'   => $request['description'],
            'start_date'    => Carbon::parse($request['start_date']),
            'end_date'      => Carbon::parse($request['end_date'])
        ]);

        Session::flash('message', "Deliverable Created Successfully");

        return redirect()->route('getDeliverables');
    }

    /**
     * Reference Get, Create Page, Post Create with Validation
     */

    public function getReferenceDocumenets()
    {
        $references = Reference::all();
        return view('references',compact('references'));
    }
    public function getReferenceDocumenetCreate()
    {
        $references = Reference::all();
        return view('reference-create',compact('references'));
    }
    public function postReferenceDocumenetCreate(ReferenceDocumenetRequest $request)
    {
        Reference::create([
            'name'             => $request['name'],
            'date_requested'   => Carbon::parse($request['date_requested']),
            'date_updated'     => Carbon::parse($request['date_updated'])?:null,
            'requirement_text' => $request['requirement_text'],
            'source_pg'        => $request['source_pg'],
            'source_par'       => $request['source_par'],
            'client_pg'        => $request['client_pg'],
            'client_par'       => $request['client_par'],
            'deliv_name'       => $request['deliv_name'],
            'deliv_id'         => $request['deliv_id']
        ]);

        Session::flash('message', "Reference Created Successfully");

        return redirect()->route('getReferenceDocumenets');
    }



    /**
     * Requirements Get, Create Page, Post Create with Validation
     */

    public function getRequirements()
    {
        $requirements = Requirements::all();
        return view('requirements',compact('requirements'));
    }
    public function getRequirementCreate()
    {
        return view('requirement-create');
    }
    public function postRequirementCreate(RequirementRequest $request)
    {
        Requirements::create([
            'name'                  => $request['name'],
            'date_requested'        => Carbon::parse($request['date_requested']),
            'text'                  => $request['text'],
            'source_doc'            => $request['source_doc'],
            'source_doc_page'       => $request['source_doc_page'],
            'source_doc_paragraph'  => $request['source_doc_paragraph'],
            'client_ref_page'       => $request['client_ref_page'],
            'client_ref_paragraph'  => $request['client_ref_paragraph'],
            'deliverable_name'      => $request['deliverable_name'],
            'deliverable_id'        => $request['deliverable_id']
        ]);

        Session::flash('message', "Requirement Created Successfully");

        return redirect()->route('getRequirements');
    }

    /**
     * Issues Get, Create Page, Post Create with Validation
     */

    public function getIssues()
    {
        $issues = Issues::all();
        return view('issues',compact('issues'));
    }
    public function getIssueCreate()
    {
        return view('issues-create');
    }
    public function postIssueCreate(IssueRequest $request)
    {
        Issues::create([
            'name'               => $request['name'],
            'assigned'           => Carbon::parse($request['assigned'])?:null,
            'expected'           => Carbon::parse($request['expected'])?:null,
            'completed'          => Carbon::parse($request['completed'])?:null,
            'priority'           => $request['priority'],
            'severity'           => $request['severity'],
            'status'             => $request['status'],
            'description'        => $request['description'],
            'status_description' => $request['status_description']
        ]);

        Session::flash('message', "Issue Created Successfully");

        return redirect()->route('getIssues');
    }

    /**
     * Issues Get, Create Page, Post Create with Validation
     */

    public function getChanges()
    {
        $changes = Changes::all();
        return view('changes',compact('changes'));
    }
    public function getChangesCreate()
    {
        return view('change-create');
    }
    public function postChangeCreate(ChangeRequest $request)
    {
        Change::create([
            'name'           => $request['name'],
            'requester'      => $request['requester'],
            'date_requested' => Carbon::parse($request['date_requested']),
            'date_updated'   => Carbon::parse($request['date_updated']),
            'status'         => $request['status'],
            'description'    => $request['description']
        ]);

        Session::flash('message', "Change Created Successfully");

        return redirect()->route('getChanges');
    }

    /**
     * Issues Get, Create Page, Post Create with Validation
     */

    public function getRisk()
    {
        $risks = Risk::all();
        return view('risk',compact('risks'));
    }
    public function getRiskCreate()
    {
        $risks = Risk::all();
        return view('risk-create',compact('risks'));
    }
    public function postRiskCreate(RisksRequest $request)
    {
        Risk::create([
            'name'        => $request['name'],
            'risk_score'  => (int) $request['risk_score'],
            'action_by'   => $request['action_by'],
            'category'    => $request['category'],
            'impact'      => $request['impact'],
            'probability' => ((int) $request['probability'] / 100),
            'mitigation'  => $request['mitigation'],
            'contingency' => $request['contingency']
        ]);

        Session::flash('message', "Risk Created Successfully");

        return redirect()->route('getRisk');
    }

}
