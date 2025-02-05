<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
  // -----------------------------------------------------------------------------------
  // Metodo para registrar usuarios
  public function register(Request $request)
  {
    $request->validate([
      'email' => 'required|string|email|unique:users',
      'password' => 'required|string|min:6|confirmed'
    ]);
    try {
      User::create([
        'email' => $request->email,
        'password' => Hash::make($request->password)
      ]);
      return redirect()->route('login')->with('success', 'Usuario registrado correctamente');
    } catch (\Exception $e) {
      return response()->json(['error' => 'Error al registrar el usuario', 'message' => $e->getMessage()], 500);
    }
  }
  // -----------------------------------------------------------------------------------

  // -----------------------------------------------------------------------------------
  // Metodo para loguarte
  public function login(Request $request)
  {
    $credentials = $request->validate([
      'email' => 'required|email',
      'password' => 'required'
    ]);

    if (!Auth::attempt($credentials)) {
      return response()->json(['message' => 'Credenciales incorrectas'], 401);
    }

    return response()->json(['message' => 'Inicio de sesión exitoso']);
  }
  // -----------------------------------------------------------------------------------

  // -----------------------------------------------------------------------------------
  // Metodo para resetear contraseña
  public function resetPassword(Request $request)
  {
      $request->validate([
          'email' => 'required|email|exists:users,email',
          'password' => 'required|string|min:6|confirmed'
      ]);
  
      try {
          $user = User::where('email', $request->email)->first();
  
          if ($user) {
              $user->password = Hash::make($request->password);
              $user->save();
              return redirect()->route('login')->with('success', 'Contraseña actualizada correctamente.');
          }

          return back()->withErrors(['email' => 'No se encontró una cuenta con ese correo.']);
      } catch (\Exception $e) {
          return back()->withErrors(['error' => 'Hubo un problema al actualizar la contraseña.']);
      }
  }  
  // -----------------------------------------------------------------------------------
}
