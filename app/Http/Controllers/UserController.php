<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function index(): JsonResponse
    {
        $users = User::all();
        return response()->json($users);
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'status' => 'required',
            'admitted_at' => 'required|date',
        ]);

        try {
            $user = User::create($request->all());
            return response()->json(['request' => 'success', 'message' => 'Usuário adicionado com sucesso!', 'user' => $user]);
        } catch (\Exception $e) {
            return response()->json(['request' => 'error', 'message' => 'Erro ao adicionar usuário: ' . $e->getMessage()], 500);
        }
    }

    public function edit($id): JsonResponse
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'status' => 'required',
            'admitted_at' => 'required|date',
        ]);

        try {
            $user = User::findOrFail($id);
            $user->update($request->all());
            return response()->json(['request' => 'success', 'message' => 'Usuário atualizado com sucesso!']);
        } catch (\Exception $e) {
            return response()->json(['request' => 'error', 'message' => 'Erro ao atualizar usuário: ' . $e->getMessage()], 500);
        }
    }

    public function destroy($id): JsonResponse
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();
            return response()->json(['request' => 'success', 'message' => 'Usuário excluído com sucesso!']);
        } catch (\Exception $e) {
            return response()->json(['request' => 'error', 'message' => 'Erro ao excluir usuário: ' . $e->getMessage()], 500);
        }
    }
}
