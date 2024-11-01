package com.example.drivingtestapp;

import java.util.ArrayList;

public class Exam {
    private String namedethi;
    private int imagedethi;
    private int soluongCauhoi;
    private int thoigian;

    public Exam(String namedethi, int imagedethi, int soluongCauhoi, int thoigian) {
        this.namedethi = namedethi;
        this.imagedethi = imagedethi;
        this.soluongCauhoi = soluongCauhoi;
        this.thoigian = thoigian;
    }

    public String getNamedethi() {
        return namedethi;
    }

    public void setNamedethi(String namedethi) {
        this.namedethi = namedethi;
    }

    public int getImagedethi() {
        return imagedethi;
    }

    public void setImagedethi(int imagedethi) {
        this.imagedethi = imagedethi;
    }

    public int getSoluongCauhoi() {
        return soluongCauhoi;
    }

    public void setSoluongCauhoi(int soluongCauhoi) {
        this.soluongCauhoi = soluongCauhoi;
    }

    public int getThoigian() {
        return thoigian;
    }

    public void setThoigian(int thoigian) {
        this.thoigian = thoigian;
    }

    private static int lastExamId = 0;

    public static ArrayList<Exam> createExamsList(int numExams) {
        ArrayList<Exam> exams = new ArrayList<>();
        lastExamId = 0;

        for (int i = 1; i <= numExams; i++) {
            int soluongCauhoi = 25;
            int thoigian = 19;

            int imagedethi = android.R.drawable.checkbox_off_background;

            exams.add(new Exam("Đề số " + ++lastExamId, imagedethi, soluongCauhoi, thoigian));
        }

        return exams;
    }
}
