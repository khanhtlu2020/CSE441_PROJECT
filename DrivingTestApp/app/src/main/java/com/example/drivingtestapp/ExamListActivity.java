package com.example.drivingtestapp;

import android.content.Intent;
import android.os.Bundle;
import android.view.MenuItem;

import androidx.annotation.NonNull;
import androidx.appcompat.app.ActionBarDrawerToggle;
import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.Toolbar;
import androidx.core.view.GravityCompat;
import androidx.drawerlayout.widget.DrawerLayout;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import com.google.android.material.navigation.NavigationView;

import java.util.ArrayList;

public class ExamListActivity extends AppCompatActivity implements NavigationView.OnNavigationItemSelectedListener {

    ArrayList<Exam> exams;
    private DrawerLayout drawerLayout;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_exam_list);

        RecyclerView recyclerView_dethi = (RecyclerView) findViewById(R.id.recyclerView_dethi);

        exams = Exam.createExamsList(5);
        MyArrayAdapter adapter = new MyArrayAdapter(exams);
        recyclerView_dethi.setAdapter(adapter);
        recyclerView_dethi.setLayoutManager(new LinearLayoutManager(this));

        Toolbar toolbar = findViewById(R.id.toolbar_thi);
        setSupportActionBar(toolbar);

        drawerLayout = findViewById(R.id.drawer_layout_thi);
        NavigationView navigationView = findViewById(R.id.nav_view_thi);
        ActionBarDrawerToggle toggle = new ActionBarDrawerToggle(this, drawerLayout, toolbar, R.string.navigation_drawer_open, R.string.navigation_drawer_close);
        drawerLayout.addDrawerListener(toggle);
        toggle.syncState();

        navigationView.setNavigationItemSelectedListener(this);
    }

    @Override
    public boolean onNavigationItemSelected(@NonNull MenuItem item) {
        int id = item.getItemId();

        if (id == R.id.nav_main) {
            startActivity(new Intent(this, MainActivity.class));
        } else if (id == R.id.nav_thithusathach) {
            drawerLayout.closeDrawer(GravityCompat.START);
        } else if (id == R.id.nav_hoclythuyet) {
            startActivity(new Intent(this, LearningActivity.class));
        } else if (id == R.id.nav_bienbao) {
            startActivity(new Intent(this, RoadSignActivity.class));
        } else if (id == R.id.nav_tracuuluat) {
            startActivity(new Intent(this, LawListActivity.class));
        } else if (id == R.id.nav_thoat) {
            exit();
        }

        drawerLayout.closeDrawer(GravityCompat.START);
        return true;
    }


    private void exit() {
        finishAffinity();
        System.exit(0);
    }
}