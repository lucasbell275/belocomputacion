<div style="font-family: Arial, sans-serif; background-color: #f4f4f7; padding: 20px; color: #333333;">
    <div style="max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
        
        
        <div style="background-color: #008DD5; padding: 20px; text-align: center; color: #ffffff;">
            <h2 style="margin: 0; font-size: 22px; text-transform: uppercase; letter-spacing: 1px;">Nueva Consulta Web</h2>
            <p style="margin: 5px 0 0 0; font-size: 14px; opacity: 0.9;">belocomputación</p>
        </div>

        
        <div style="padding: 24px;">
            <p style="font-size: 16px; margin-top: 0; color: #555;">Has recibido un nuevo mensaje desde el formulario de contacto:</p>
            
            <table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
                <tr>
                    <td style="padding: 10px 0; border-bottom: 1px solid #eee; font-weight: bold; width: 130px; color: #555;">Nombre:</td>
                    <td style="padding: 10px 0; border-bottom: 1px solid #eee; color: #333;">{{ $request->nombre }} {{ $request->apellido }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; border-bottom: 1px solid #eee; font-weight: bold; color: #555;">Correo:</td>
                    <td style="padding: 10px 0; border-bottom: 1px solid #eee; color: #333;">
                        <a href="mailto:{{ $request->email }}" style="color: #008DD5; text-decoration: none;">{{ $request->email }}</a>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; border-bottom: 1px solid #eee; font-weight: bold; color: #555;">Teléfono:</td>
                    <td style="padding: 10px 0; border-bottom: 1px solid #eee; color: #333;">{{ $request->telefono ?? 'No especificado' }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; border-bottom: 1px solid #eee; font-weight: bold; color: #555;">Motivo:</td>
                    <td style="padding: 10px 0; border-bottom: 1px solid #eee; color: #333;">{{ $request->razon }}</td>
                </tr>
            </table>

            <div style="margin-top: 20px;">
                <p style="font-weight: bold; color: #555; margin-bottom: 8px;">Mensaje:</p>
                <div style="background-color: #f9f9fb; padding: 15px; border-left: 4px solid #008DD5; border-radius: 4px; color: #444; font-size: 14px; line-height: 1.5;">
                    {!! nl2br(e($request->mensaje)) !!}
                </div>
            </div>
        </div>

        
        <div style="background-color: #f4f4f7; padding: 15px; text-align: center; font-size: 12px; color: #888;">
            Este mensaje fue enviado automáticamente desde el sitio web de belocomputación.
        </div>

    </div>
</div>