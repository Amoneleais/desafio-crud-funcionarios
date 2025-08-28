<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncionarioRequest extends FormRequest
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
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array
  {
    $funcionarioId = $this->route('id');
    return [
      'nome' => 'required|string|max:255',
      'cpf' =>
        'nullable|string|max:14|unique:funcionarios,cpf,' .
        ($funcionarioId ? $funcionarioId : null),
      'data_nascimento' => 'nullable|date',
      'telefone' => 'nullable|numeric',
      'genero' => 'required|in:Masculino,Feminino,Outro',
    ];
  }

  public function messages(): array
  {
    return [
      'nome.required' => 'O campo nome é obrigatório.',
      'cpf.unique' => 'O CPF já está em uso.',
      'data_nascimento.date' =>
        'A data de nascimento deve ser uma data válida.',
      'telefone.numeric' => 'O telefone deve conter apenas números.',
      'genero.required' => 'O campo gênero é obrigatório.',
      'genero.in' => 'O gênero deve ser Masculino, Feminino ou Outro.',
    ];
  }
}
