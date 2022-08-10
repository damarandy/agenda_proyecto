<?php

function getLoginRules() {
				return array(
					array(
									'field' => 'email',
									'label' => 'Correo',
									'rules' => 'required|trim|valid_email',
									'errors' => array(
										'required' => 'El %s es invalido.',
									),
					),
					array(
									'field' => 'password',
									'label' => 'Password',
									'rules' => 'required',
									'errors' => array(
													'required' => 'El %s es invalido.',
									),
					)
			);
	}
