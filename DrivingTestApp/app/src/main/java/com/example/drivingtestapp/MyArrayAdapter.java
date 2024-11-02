package com.example.drivingtestapp;

import android.app.AlertDialog;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import java.util.List;

public class MyArrayAdapter extends RecyclerView.Adapter<MyArrayAdapter.ViewHolder> {
    private List<Exam> mExams;

    private static final Class[] activities = new Class[]{
            ExamActivity.class,
            ExamActivity1.class,
            ExamActivity2.class,
            ExamActivity3.class,
            ExamActivity4.class,
    };

    public MyArrayAdapter(List<Exam> exams) {
        mExams = exams;
    }

    public static class ViewHolder extends RecyclerView.ViewHolder {
        public ImageView deImageView;
        public TextView deTextView;
        public TextView soluongCauhoiTextView;
        public Button lamBaiButton;

        public ViewHolder(View itemView) {
            super(itemView);
            deImageView = itemView.findViewById(R.id.imgDe);
            deTextView = itemView.findViewById(R.id.txtTenLuat);
            soluongCauhoiTextView = itemView.findViewById(R.id.txtMucPhat);
            lamBaiButton = itemView.findViewById(R.id.btnLamBai);
        }
    }

    @NonNull
    @Override
    public ViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        Context context = parent.getContext();
        LayoutInflater inflater = LayoutInflater.from(context);
        View examView = inflater.inflate(R.layout.exam_list, parent, false);
        return new ViewHolder(examView);
    }

    @Override
    public void onBindViewHolder(@NonNull ViewHolder holder, int position) {
        Exam exam = mExams.get(position);

        TextView textViewDe = holder.deTextView;
        textViewDe.setText(exam.getNamedethi());

        TextView textViewSoluongCauhoi = holder.soluongCauhoiTextView;
        String cauhoiVaThoigian = exam.getSoluongCauhoi() + " câu/" + exam.getThoigian() + " phút";
        textViewSoluongCauhoi.setText(cauhoiVaThoigian);

        ImageView imageView = holder.deImageView;
        imageView.setImageResource(R.drawable.exam);

        Button buttonLamBai = holder.lamBaiButton;
        buttonLamBai.setText("Làm bài");
        buttonLamBai.setEnabled(true);

        buttonLamBai.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Context context = v.getContext();

                new AlertDialog.Builder(context)
                        .setTitle("BẮT ĐẦU LÀM BÀI")
                        .setMessage("\nĐề thi gồm 25 câu hỏi làm bài trong thời gian 19 phút.\n" +
                                "\nĐể vượt qua bài thi, bạn cần trả lời đúng 21/25 câu hỏi.")
                        .setPositiveButton("Bắt đầu", new DialogInterface.OnClickListener() {
                            @Override
                            public void onClick(DialogInterface dialog, int which) {
                                Class activityToStart = activities[position % activities.length];
                                Intent intent = new Intent(context, activityToStart);
                                intent.putExtra("EXAM_ID", exam.getNamedethi());
                                context.startActivity(intent);
                            }
                        })
                        .setNegativeButton("Hủy", null)
                        .show();
            }
        });
    }

    @Override
    public int getItemCount() {
        return mExams.size();
    }
}
