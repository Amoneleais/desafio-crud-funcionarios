<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFuncionarioRequest extends FormRequest
{
  protected function prepareForValidation()
  {
    $data = $this->all();
    $cpf = isset($data['cpf']) ? preg_replace('/\D/', '', $data['cpf']) : null;
    $telefone = isset($data['telefone'])
      ? preg_replace('/\D/', '', $data['telefone'])
      : null;
    $this->merge([
      'cpf' => $cpf,
      'telefone' => $telefone,
    ]);
  }

  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return auth()->check();
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array
  {
    return [
      'nome' => 'required|string|max:255',
      'cpf' => 'required|string|size:11|unique:funcionarios,cpf',
      'data_nascimento' => 'required|date|before:today',
      'telefone' => 'required|string|size:11',
      'genero' => 'required|in:Masculino,Feminino,Outro',
    ];
  }

  public function messages(): array
  {
    return [
      'nome.required' => 'O campo nome é obrigatório.',
      'cpf.required' => 'O campo CPF é obrigatório.',
      'cpf.unique' => 'O CPF já está em uso.',
      'cpf.size' => 'O CPF deve ter 11 dígitos.',
      'data_nascimento.required' => 'A data de nascimento é obrigatória.',
      'data_nascimento.date' =>
        'A data de nascimento deve ser uma data válida.',
      'data_nascimento.before' =>
        'A data de nascimento deve ser anterior a hoje.',
      'telefone.required' => 'O campo telefone é obrigatório.',
      'telefone.size' => 'O telefone deve ter 11 dígitos.',
      'genero.required' => 'O campo gênero é obrigatório.',
      'genero.in' => 'O gênero deve ser Masculino, Feminino ou Outro.',
    ];
  }
}
