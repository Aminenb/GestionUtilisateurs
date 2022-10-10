<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utilisateurs = Utilisateur::all();

        return Inertia::render(
            'Utilisateurs/Index',
            [
                'utilisateurs' => $utilisateurs
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render(
            'Utilisateurs/Create'
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Utilisateur::create([
            'identifiant' => $request->identifiant,
            'motdepasse' => $request->motdepasse,
            'confirmationmotdepasse' => $request->confirmationmotdepasse,
            'nomcomplet' => $request->nomcomplet,
            'role' => $request->role,
            'restrictionacces' => $request->restrictionacces,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'equipe' => $request->equipe,
            'modedetravail' => $request->modedetravail,
        ]);
        sleep(1);

        return redirect()->route('utilisateurs.index')->with('message', 'User Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function show(Utilisateur $utilisateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Utilisateur $utilisateur)
    {
        return Inertia::render(
            'Utilisateurs/Edit',
            [
                'utilisateur' => $utilisateur
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utilisateur $utilisateur)
    {
        $utilisateur->identifiant = $request->identifiant;
        $utilisateur->motdepasse = $request->motdepasse;
        $utilisateur->confirmationmotdepasse = $request->confirmationmotdepasse;
        $utilisateur->nomcomplet = $request->nomcomplet;
        $utilisateur->role = $request->role;
        $utilisateur->restrictionacces = $request->restrictionacces;
        $utilisateur->email = $request->email;
        $utilisateur->telephone = $request->telephone;
        $utilisateur->equipe = $request->equipe;
        $utilisateur->modedetravail = $request->modedetravail;
        $utilisateur->save();
        sleep(1);

        return redirect()->route('utilisateurs.index')->with('message', 'User Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utilisateur $utilisateur)
    {
        $utilisateur->delete();
        sleep(1);

        return redirect()->route('utilisateurs.index')->with('message', 'User Deleted Successfully');
    }
}
