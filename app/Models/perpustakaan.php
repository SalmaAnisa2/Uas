<?php

Schema::create('users', function (Blueprint $table) 
        {
            $table->id();
            $table->string('perpustakaan');
            $table->text('alamat_lengkap');
            $table->string('no_telpon');
            $table->string('tipe');
            $table->double('longitude');
            $table->double('latitude');
        });
